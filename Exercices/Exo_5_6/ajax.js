$("#formajax").submit(function (e) {
    e.preventDefault();
    var form_url = $(this).attr("action");
    var form_method = $(this).attr("method");
    var form_data = $(this).serialize();
  
    $.ajax({
      url: form_url,
      type: form_method,
      data: form_data,
    }).done(function (response) {
        if (response.includes("Nom")) {

            $(".alert_firstname").removeClass("alert-danger");
            $(".alert_firstname").html("");

            $(".alert_mail").removeClass("alert-danger");
            $(".alert_mail").html("");

            $(".alert_success").removeClass("alert-success");
            $(".alert_success").html("");

            $(".alert_name").addClass("alert-danger");
            $(".alert_name").html(response);

        } else if (response.includes("Prénom")) {

            $(".alert_name").removeClass("alert-danger");
            $(".alert_name").html("");

            $(".alert_mail").removeClass("alert-danger");
            $(".alert_mail").html("");

            $(".alert_success").removeClass("alert-success");
            $(".alert_success").html("");

            $(".alert_firstname").addClass("alert-danger");
            $(".alert_firstname").html(response);

        } else if (response.includes("Adresse")) {

            $(".alert_name").removeClass("alert-danger");
            $(".alert_name").html("");

            $(".alert_firstname").removeClass("alert-danger");
            $(".alert_firstname").html("");

            $(".alert_success").removeClass("alert-success");
            $(".alert_success").html("");

            $(".alert_mail").addClass("alert-danger");
            $(".alert_mail").html(response);

        } else if (response.includes(", ")){
            $(".alert_name").removeClass("alert-danger");
            $(".alert_name").html("");

            $(".alert_firstname").removeClass("alert-danger");
            $(".alert_firstname").html("");

            $(".alert_mail").removeClass("alert-danger");
            $(".alert_mail").html("");

            $(".alert_success").addClass("alert-success");
            $(".alert_success").html(response);
            $.get("tableau.json", function(data){
                console.log(data);
            });
        }
    });
  });
  