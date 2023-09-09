$(document).ready(function () {
    $("#formLogin").submit(function (event) {
        event.preventDefault();
        event.stopPropagation();
        const usuario = $("#usuario").val();
        const senha = $("#senha").val();
        const token = $('meta[name="csrf-token"]').attr("content");

        $.ajax({
            type: "POST",
            url: "/login",
            data: {
                user: usuario,
                password: senha,
                _token: token,
            },
            dataType: "json",
            success: function (response) {
                if (response.valido) {
                    window.location.href = "/comandas/ativas";
                } else {
                    alert("Usuário ou senha incorretos.");
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr.statusText);
            },
        });
    });
});
