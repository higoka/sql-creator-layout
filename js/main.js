function create() {
    var input = $('form').find('input');

    $.post('create.php', input.serialize(), function (data) {
        var data = $.parseJSON(data);

        $('#catalogItems').val(data[0]);
        $('#itemsBase').val(data[1]);
        $('#furnidata').val(data[2]);

        $('#result').fadeIn();
    });
}

