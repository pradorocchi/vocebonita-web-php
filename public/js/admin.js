
function deleteTip(id){
    var areYouSure = confirm("Tem certeza que deseja remover este registro?");
    if (areYouSure == true) {
        ajaxDeleteTip(id);
    }
}
function ajaxDeleteTip(id){
    $.ajax({
        url: '/dicas/' + id,
        dataType: "JSON",
        type: "POST",
        data: {
            "_method": "DELETE"
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data, textStatus, jqXHR) {
            window.location.replace("/listar/dicas");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Ocorreu um erro ao remover a Dica.");
            console.log(textStatus);
        }
    });
}



function deletePromotion(id){
    var areYouSure = confirm("Tem certeza que deseja remover este registro?");
    if (areYouSure == true) {
        ajaxDeletePromotion(id);
    }
}
function ajaxDeletePromotion(id){
    $.ajax({
        url: '/promocoes/' + id,
        dataType: "JSON",
        type: "POST",
        data: {
            "_method": "DELETE"
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data, textStatus, jqXHR) {
            window.location.replace("/listar/promocoes");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Ocorreu um erro ao remover a Promoção.");
            console.log(textStatus);
        }
    });
}




function deleteEmployee(id){
    var areYouSure = confirm("Tem certeza que deseja remover este registro?");
    if (areYouSure == true) {
        ajaxDeleteEmployee(id);
    }
}
function ajaxDeleteEmployee(id){
    $.ajax({
        url: '/profissionais/' + id,
        dataType: "JSON",
        type: "POST",
        data: {
            "_method": "DELETE"
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data, textStatus, jqXHR) {
            window.location.replace("/listar/profissionais");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Ocorreu um erro ao remover a funcionária.");
            console.log(textStatus);
        }
    });
}



function deleteManicure(id){
    var areYouSure = confirm("Tem certeza que deseja remover esta imagem?");
    if (areYouSure == true) {
        ajaxDeleteManicure(id);
    }
}
function ajaxDeleteManicure(id){
    $.ajax({
        url: '/deletar/manicure/' + id,
        dataType: "JSON",
        type: "POST",
        data: {
            "_method": "DELETE"
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data, textStatus, jqXHR) {
            window.location.replace("/listar/manicure");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Ocorreu um erro ao remover a imagem.");
        }
    });
}



function deleteCabelo(id){
    var areYouSure = confirm("Tem certeza que deseja remover esta imagem?");
    if (areYouSure == true) {
        ajaxDeleteCabelo(id);
    }
}
function ajaxDeleteCabelo(id){
    $.ajax({
        url: '/deletar/cabelos/' + id,
        dataType: "JSON",
        type: "POST",
        data: {
            "_method": "DELETE"
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data, textStatus, jqXHR) {
            window.location.replace("/listar/cabelos");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Ocorreu um erro ao remover a imagem.");
        }
    });
}




function deleteMaquiagem(id){
    var areYouSure = confirm("Tem certeza que deseja remover esta imagem?");
    if (areYouSure == true) {
        ajaxDeleteMaquiagem(id);
    }
}
function ajaxDeleteMaquiagem(id){
    $.ajax({
        url: '/deletar/maquiagens/' + id,
        dataType: "JSON",
        type: "POST",
        data: {
            "_method": "DELETE"
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data, textStatus, jqXHR) {
            window.location.replace("/listar/maquiagens");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Ocorreu um erro ao remover a imagem.");
        }
    });
}




function deleteSobrancelha(id){
    var areYouSure = confirm("Tem certeza que deseja remover esta imagem?");
    if (areYouSure == true) {
        ajaxDeleteSobrancelha(id);
    }
}
function ajaxDeleteSobrancelha(id){
    $.ajax({
        url: '/deletar/sobrancelhas/' + id,
        dataType: "JSON",
        type: "POST",
        data: {
            "_method": "DELETE"
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data, textStatus, jqXHR) {
            window.location.replace("/listar/sobrancelhas");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Ocorreu um erro ao remover a imagem.");
        }
    });
}
