document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('input[name="flexRadioDefault"]').forEach(function (radio) {
        radio.addEventListener('change', function () {
            document.querySelectorAll('.product').forEach(function (product) {
                product.style.display = 'none';
            });


            let selectedType = this.getAttribute('data-type');


            document.querySelectorAll('.product.' + selectedType).forEach(function (product) {
                product.style.display = 'block';
            });
        });
    });
});