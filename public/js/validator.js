// Doi tuong `Validator`
function Validator(options) {

    var selectorRules = {};

    // Ham thuc hien validate
    function validate(inputElement, rule) {
        var formParentElement = inputElement.closest(options.formGroupSelector);
        var errorElement = formParentElement.querySelector(options.errorSelector);
        var errorMessage;

        // Lay ra cac rules cua selector
        var rules = selectorRules[rule.selector];

        // Lap qua tung rule & kiem tra
        // Neu co loi thi dung viec kiem tra
        for (var i = 0; i < rules.length; ++i) {
            switch (inputElement.type) {
                case 'checkbox':
                case 'radio':
                    errorMessage = rules[i](
                        formElement.querySelector(rule.selector + ':checked')
                    );
                    break;
                default:
                    errorMessage = rules[i](inputElement.value);
            }
            if (errorMessage) break;
        }

        if (errorMessage) {
            errorElement.innerText = errorMessage;
            formParentElement.classList.add('invalid');
        } else {
            errorElement.innerText = '';
            formParentElement.classList.remove('invalid');
        }

        return !errorMessage;
    }

    function resetErrorMessage(inputElement) {
        var formParentElement = inputElement.closest(options.formGroupSelector);
        var errorElement = formParentElement.querySelector(options.errorSelector);
        errorElement.innerText = '';
        formParentElement.classList.remove('invalid');
    }

    // Lay element cua form can validate
    var formElement = document.querySelector(options.form);
    if (formElement) {
        // Khi submit form
        formElement.onsubmit = function(e) {
            e.preventDefault();

            var isFormValid = true;

            // Lap qua tung rules va validate
            options.rules.forEach(function(rule) {
                var inputElement = formElement.querySelector(rule.selector);
                var isValid = validate(inputElement, rule);
                if (!isValid) {
                    isFormValid = false;
                }
            });

            if (isFormValid) {
                // Truong hop submit voi js
                if (typeof options.onSubmit === 'function') {
                    var enableInputs = formElement.querySelectorAll('[name]'); //:not([disabled])
                    var formValues = Array.from(enableInputs).reduce(function(values, input) {
                        switch (input.type) {
                            case 'radio':
                                values[input.name] = formElement.querySelector('input[name="' + input.name + '"]:checked').value;
                                break;
                            case 'checkbox':
                                if (!input.matches(':checked')) {
                                    values[input.name] = '';
                                    return values;
                                }
                                if (!Array.isArray(values[input.name])) {
                                    values[input.name] = [];
                                }
                                values[input.name].push(input.value);
                                break;
                            case 'file':
                                values[input.name] = input.files;
                                break;
                            default:
                                values[input.name] = input.value;
                        }
                        return values;
                    }, {});
                    options.onSubmit(formValues);
                }
                // Truong hop submit voi hanh vi mac dinh
                else {
                    formElement.submit();
                }
            }
        }

        // Lap qua moi rule va xu ly (lang nghe su kien)
        options.rules.forEach(function(rule) {
            // Luu lai cac rule cho moi input
            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            var inputElements = formElement.querySelectorAll(rule.selector);

            Array.from(inputElements).forEach(function(inputElement) {
                if (inputElement) {
                    // Xu ly truong hop blur khoi input
                    inputElement.onblur = function() {
                        validate(inputElement, rule);
                    };
                    inputElement.onchange = function() {
                        validate(inputElement, rule);
                    };
                    // Xu ly moi khi nguoi dung nhap vao input
                    inputElement.oninput = function() {
                        resetErrorMessage(inputElement);
                    };
                }
            });
        });
    }
}

// Dinh nghia rules
// Nguyen tac cua cac rules:
// 1. Khi co loi => Tra ra message loi
// 2. Khi hop le => Khong tra ra cai 
Validator.isRequired = function(selector, message) {
    return {
        selector: selector,
        test: function(value) {
            if (typeof value === 'string') {
                return value.trim() ? undefined : message || 'Vui lòng nhập trường này';
            }
            return value ? undefined : message || 'Vui lòng nhập trường này';
        }
    };
}

Validator.isEmail = function(selector, message) {
    return {
        selector: selector,
        test: function(value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : message || 'Trường này phải là email';
        }
    };
}

Validator.minLength = function(selector, min, message) {
    return {
        selector: selector,
        test: function(value) {
            return value.length >= min ? undefined : message || `Vui lòng nhập tối thiểu ${min} kí tự`;
        }
    };
}

Validator.isConfirmed = function(selector, getConfirmValue, message) {
    return {
        selector: selector,
        test: function(value) {
            return value === getConfirmValue() ? undefined : message || 'Giá trị nhập vào không chính xác';
        }
    };
}