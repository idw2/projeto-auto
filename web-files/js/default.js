function getMyFolderRoot() {
    return "";
}

$(document).ready(function() {

    if (document.getElementById("preco") != null) {
        $("#preco").keyup(function() {
            $(".view-preco").html($("#preco").val());
        });
    }
    
    if (document.getElementById("nome") != null) {
        $("#nome").keyup(function() {
            $(".view-nome").html($("#nome").val());
        });
    }


    if (document.getElementById("linha_1") != null) {
        $("#linha_1").keyup(function() {
            $(".view-linha_1").html($("#linha_1").val());
        });
    }


    if (document.getElementById("linha_2") != null) {
        $("#linha_2").keyup(function() {
            $(".view-linha_2").html($("#linha_2").val());
        });
    }

    if (document.getElementById("linha_3") != null) {
        $("#linha_3").keyup(function() {
            $(".view-linha_3").html($("#linha_3").val());
        });
    }


});



function getCrop(id) {

    var $image1 = $("." + id + "_preview_1"),
            $dataX1_1 = $("#" + id + "_dataX1_1"),
            $dataY1_1 = $("#" + id + "_dataY1_1"),
            $dataX2_1 = $("#" + id + "_dataX2_1"),
            $dataY2_1 = $("#" + id + "_dataY2_1"),
            $dataHeight_1 = $("#" + id + "_dataHeight_1"),
            $dataWidth_1 = $("#" + id + "_dataWidth_1");

    $image1.cropper({
        aspectRatio: 0.9,
        done: function(data) {
            console.log(data.x1 + ":" + data.y1 + ":" + data.x2 + ":" + data.y2 + ":" + data.height + ":" + data.width);
            $dataX1_1.val(data.x1);
            $dataY1_1.val(data.y1);
            $dataX2_1.val(data.x2);
            $dataY2_1.val(data.y2);
            $dataHeight_1.val(data.height);
            $dataWidth_1.val(data.width);
        }
    });

    var $image2 = $("." + id + "_preview_2"),
            $dataX1_2 = $("#" + id + "_dataX1_2"),
            $dataY1_2 = $("#" + id + "_dataY1_2"),
            $dataX2_2 = $("#" + id + "_dataX2_2"),
            $dataY2_2 = $("#" + id + "_dataY2_2"),
            $dataHeight_2 = $("#" + id + "_dataHeight_2"),
            $dataWidth_2 = $("#" + id + "_dataWidth_2");

    $image2.cropper({
        aspectRatio: 1.8,
        done: function(data) {
            console.log(data.x1 + ":" + data.y1 + ":" + data.x2 + ":" + data.y2 + ":" + data.height + ":" + data.width);
            $dataX1_2.val(data.x1);
            $dataY1_2.val(data.y1);
            $dataX2_2.val(data.x2);
            $dataY2_2.val(data.y2);
            $dataHeight_2.val(data.height);
            $dataWidth_2.val(data.width);
        }
    });

}

function release_crop(key, imagem, codfoto, indice, dimensao, guid) {

    var dataX1 = $("#" + key + "_dataX1_" + indice).val();
    var dataY1 = $("#" + key + "_dataY1_" + indice).val();
    var dataX2 = $("#" + key + "_dataX2_" + indice).val();
    var dataY2 = $("#" + key + "_dataY2_" + indice).val();
    var dataWidth = $("#" + key + "_dataWidth_" + indice).val();
    var dataHeight = $("#" + key + "_dataHeight_" + indice).val();
    var link = '';
    if (dimensao == "retrato") {
        link = getMyFolderRoot() + '/web-files/server/crop.php';
    } else {
        link = getMyFolderRoot() + '/web-files/server/crop_paisagem.php';
    }

    $(".LoaderCrop").removeClass('hide');

    $.ajax({
        type: 'post',
        data: "indice=" + indice + "&x1=" + dataX1 + "&y1=" + dataY1 + "&x2=" + dataX2 + "&y2=" + dataY2 + "&w=" + dataWidth + "&h=" + dataHeight + "&codfoto=" + codfoto + "&imagem=" + imagem,
        url: link,
        success: function(data) {
            $(".LoaderCrop").addClass('hide');
            if (dimensao == "retrato") {
                choose_crop(guid);
            } else {
                $("a[title=Close]").click();
                window.location.reload();
            }
        }
    });
}


function choose_crop(id) {

    if ($(".show_" + id + "_2").hasClass("hidex")) {
        $(".show_" + id + "_1").addClass('hidex');
        $(".show_" + id + "_2").removeClass('hidex');
    } else {
        $(".show_" + id + "_1").removeClass('hidex');
        $(".show_" + id + "_2").addClass('hidex');
    }
}


function vDestaqueUpdate(id, url, codproduto) {

    $("#" + id).removeClass("hide");
    $.ajax({
        type: 'post',
        data: '',
        url: getMyFolderRoot() + '/' + url,
        success: function(data) {

            if ($(".ico-default-star-" + codproduto).hasClass("desative")) {
                $(".ico-default-star-" + codproduto).removeClass("desative");
            } else {
                $(".ico-default-star-" + codproduto).addClass("desative");
            }

            $("#" + id).addClass("hide");
            console.log(data);

        }
    });

}

function vStatusUpdate(id, url, codproduto) {

    $("#" + id).removeClass("hide");

    $.ajax({
        type: 'post',
        data: '',
        url: getMyFolderRoot() + '/' + url,
        success: function(data) {

            if ($(".ico-default-eye-" + codproduto).hasClass("desative")) {
                $(".ico-default-eye-" + codproduto).removeClass("desative");
            } else {
                $(".ico-default-eye-" + codproduto).addClass("desative");
            }

            $("#" + id).addClass("hide");
            console.log(data);

        }
    });

}

function vNovidadeUpdate(id, url, codproduto) {

    $("#" + id).removeClass("hide");

    $.ajax({
        type: 'post',
        data: '',
        url: getMyFolderRoot() + '/' + url,
        success: function(data) {

            if ($(".ico-default-novidade-" + codproduto).hasClass("desative")) {
                $(".ico-default-novidade-" + codproduto).removeClass("desative");
            } else {
                $(".ico-default-novidade-" + codproduto).addClass("desative");
            }

            $("#" + id).addClass("hide");
            console.log(data);

        }
    });

}

function vDeleteUpdate(url, codproduto) {

    $("#delete_" + codproduto).removeClass("hide");

    if (confirm('ATENÇÃO: Esta ação não poderá ser desfeita!\n Deseja continuar?')) {
        $.ajax({
            type: 'post',
            data: '',
            url: getMyFolderRoot() + '/' + url,
            success: function(data) {

                $("#delete_" + codproduto).addClass("hide");
                $("#veiculo_" + codproduto).remove();
                console.log(data);

            }
        });
    } else {
        $("#" + id).addClass("hide");
    }


}
