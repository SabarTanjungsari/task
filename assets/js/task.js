$(function () {
// Active menu
    switch (menu) {
        case 'Home':
            $('#home').addClass('active');
            break;
        case 'Weekly':
            $('#weekly').addClass('active');
            break;
        default :
            $('#home').addClass('active');
    }

// start list weekly
    $('#weeklyListTable').DataTable();

    $("#weeklyListTable td:nth-child(3)").each(function () {
        if ($(this).text() == "Close") {
            $(this).parent("tr").addClass('alert alert-dark');
        } else if ($(this).text() == "Complete") {
            $(this).parent("tr").addClass('alert alert-warning');
        } else if ($(this).text() == "Draft") {
            $(this).parent("tr").addClass('alert alert-success')
        }
    });

// end list weekly


});


// Save new weekly
var save_method; // for save method string
var table;

function add_weekly() {
    save_method = 'add_weekly';
    $("#form_weekly")[0].reset(); // reset form on modal
    $("#modal_weekly").modal('show'); // show bootstrap modal
    $(".modal-header #weeklyModalLabel").text("Add New Weekly");
}

function save_weekly()
{
    var url;
    if (save_method == 'add_weekly') {
        url = base_url + 'Weekly/add_weekly';
    } else {
        url = base_url + 'Weekly/update_weekly';
    }

    console.log(url);
    $.ajax({
        url: url,
        type: "POST",
        data: $('#form_weekly').serialize(),
        dataType: "JSON",
        success: function (data)
        {
            //if success close modal and reload ajax table
            $('#modal_weekly').modal('hide');
            location.reload();// for reload a page
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
        }
    });
}

function edit_weekly(id)
{
    save_method = "update_weekly";
    $("#form_weekly")[0].reset();
    $.ajax({
        url: base_url + 'Weekly/get_by_id_json/' + id,
        type: "GET",
        dataType: "JSON",
        success: function (data) {
            $('[name="id"]').val(data.x_weekly_id);
            $('[name="name"]').val(data.name);

            $('#modal_weekly').modal('show');
            $('.weeklyModalLabel').text('Edit Weekly');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
        }
    });
}
// End Save new weekly


// Start Year and Period
function periodPage(id) {
    window.location.href = base_url + 'Period/' + id;
}

// Save new weekly
var save_method; // for save method string
var table;

function add_year() {
    save_method = 'add_year';
    $("#form_year")[0].reset(); // reset form on modal
    $("#modal_year").modal('show'); // show bootstrap modal
    $(".modal-header #yearModalLabel").text("Add New Year");
}

function edit_year(id) {
    save_method = "update_year";
    $("#form_year")[0].reset();
    $.ajax({
        url: base_url + 'Year/get_by_id_json/' + id,
        type: "GET",
        dataType: "JSON",
        success: function (data) {
            $('[name="id"]').val(data.c_year_id);
            $('[name="name"]').val(data.name);

            $('#modal_year').modal('show');
            $('.yearModalLabel').text('Edit Year');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
        }
    });
}

function save_year() {
    var url;
    if (save_method == 'add_year') {
        url = base_url + 'Year/add_year';
    } else {
        url = base_url + 'Year/update_year';
    }

    $.ajax({
        url: url,
        type: "POST",
        data: $('#form_year').serialize(),
        dataType: "JSON",
        success: function (data)
        {
            //if success close modal and reload ajax table
            $('#modal_year').modal('hide');
            location.reload();// for reload a page
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
        }
    });
}
// End Year and Period
