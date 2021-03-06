if (!CB) {
    var CB = {};
}

if (!CB.form) {
    CB.form = {};
}

if (!CB.form.validator) {
    CB.form.validator = {};
}

if (!CB.form.validator.file) {
    CB.form.validator.file = {};
}

CB.form.validator.file.multiple = function (e, errorMessage) {
    if (e.maxLength === 0 || e.files.length <= e.maxLength) {
        e.setCustomValidity('');

        return true;
    }

    e.setCustomValidity(errorMessage);
};
