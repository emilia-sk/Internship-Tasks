$(function () {
    function autoCalcSetup() {
        $('form#cart .product_list').jAutoCalc({ keyEventsFire: true, decimalPlaces: 2, emptyAsZero: true });
        $('form#cart').jAutoCalc({ decimalPlaces: 2 });
    }
    autoCalcSetup();
          
    $('#add-product').on("click", function (e) {
        e.preventDefault();

        var $form = $(this).parents('form');
        var $top = $form.find('.product_list').first();
        var $new = $top.clone(true);

        $new.jAutoCalc('destroy');
        $new.insertBefore($top);
        $new.find('input[type=text]').val('');
        autoCalcSetup();
    });
});