$(document).ready(function () {

    $(".__favorite").click(function () {

        var film_id = $(this).attr('data-id');
        $(this).toggleClass("fas");
        $(this).toggleClass("far");
        $(this).toggleClass("text-warning");

        $.ajax({
            url: 'http://trash.tld:8000/addToFavorites',
            method: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                film_id: film_id
            },
            success: function (r) {
                if (r) {
                    //location.reload();
                    console.log('success');
                }
            }
        })
    });

    $("#plusIcon").click(function () {


        $('#plusIcon').toggleClass('fas fa-plus');
        $('#plusIcon').toggleClass('fas fa-minus');
        $("#createAList").toggleClass('toggleDivClose');
        $("#createAList").toggleClass('toggleDiv');


    });

    $("#homeClick").click(function () {
        let id = $(this).attr("data-id");

            window.location = 'http://trash.tld:8000/film/' + id;


    })

    $("#listName").change(function () {

        let l= document.getElementById("listName");
        let idL = l.value;
        let f= document.getElementById("idF");
        let idF = f.value;
        //alert(idL);
        let _this = $(this)
        $.get({
            url: 'http://trash.tld:8000/addToList/'+idL+'/'+idF,
            crossDomain: true,
            dataType: 'jsonp',

            data: {
                idL: idL,
                idF: idF
            },
            success: function (r) {

                if (r) {
                    $("#listName option[value='"+idL+"']").remove();
                    Swal.fire({
                        title: 'succeedly added!',
                        text: 'The film has been added.',
                        type: 'success',
                        timer: 1000
                    })
                }
            },
            error : function(xhr, statut, erreur){
                var err = eval("(" + xhr.responseText + ")");
                //alert(err);
            },

        })

    });

    $(".__addList").click(function () {

        let lN= document.getElementById("NewListName");
        let ln = lN.value;
        let lD= document.getElementById("NewListDesc");
        let ld = lD.value;
        let f= document.getElementById("idF");
        let idF = f.value;

        let _this = $(this)
        $.get({
            url: 'http://trash.tld:8000/addList/'+ln+'/'+ld+'/'+idF,
            crossDomain: true,
            dataType: 'jsonp',

            data: {

            },
            success: function (r) {
                document.location.reload(true);
                if (r) {
                    Swal.fire({
                        title: 'succeedly added!',
                        text: 'The film has been added.',
                        type: 'success',
                        timer: 1000
                    })
                }
            },
            error : function(xhr, statut, erreur){
                var err = eval("(" + xhr.responseText + ")");
                //alert(err);
            },

        })

    });



    $(".__deleteList").click(function () {

        Swal.fire({
            title: 'Are you sure?',
            text: "Once deleted, you will not be able to recover this imaginary file!",
            type: 'warning',
            confirmButtonText: 'Yes, delete it!',
            showCancelButton: true,
            confirmButtonColor: '#0084ff',
            cancelButtonColor: '#d33',
            reverseButtons: true,
            showCloseButton: true
        }).then((result) => {
            if (result.value) {
                let id = $(this).attr("data-id");
                let _this = $(this)
                $.ajax({
                    url: 'http://trash.tld:8000/deleteList',
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id: id
                    },
                    success: function (r) {
                        if (r) {
                            _this.closest('tr').remove()
                            Swal.fire({
                                title: 'Deleted!',
                                text: 'User has been deleted.',
                                type: 'success',
                                timer: 1000
                            })
                        }
                    }
                })
            }
        })
    });


    $(".del_account_section").click(function () {

        $("#deleteAccount").removeClass("h-0");
        $("#deleteAccount").removeAttr("style");
        $("#deleteAccount").animate({
            height: "auto"
        }, 1000 );
    });

    $(".del_account").click(function () {
        let id = $(this).attr("data-id");
        let password = $('.password').val();
            $.ajax({
                url: 'http://trash.tld:8000/deleteUserAccount/' + id,
                method: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: id,
                    password : password,
                },
                success: function (r) {
                    if (r.passwordError != "") {
                        $('.passwordError').html(r.passwordError)
                    }else {
                        $(location).attr('href', '/home');
                    }
                }
            })

    })


})
;