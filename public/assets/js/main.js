$(document).ready(function () {
    $('.home__section-slider .slider').slick()
    $('.categories__slider .categories__slider-inner').slick({
        infinite: true,
        slidesToShow: 3,
    });
    $('.home__products').slick({
        infinite: true,
        slidesToShow: 4,
    });

    $('.single__product-slider .gallery').slick({
        infinite: true,
        slidesToShow: 4,
        arrows: false,
    })
    $('.single__product-slider .single').slick()

    $(".modal .modal__container").on("click", function (e) {
        e.stopPropagation();
    });

    $(".open__modal").on("click", function (e) {
        e.preventDefault();
        let $this = $(this);
        let modal = $this.attr('data-modal');
        $("body").css("overflow", "hidden");
        $('.modal').fadeOut()
        $(`#${modal}`).fadeIn();
    });

    $(".modal .close, .modal ").on("click", function (e) {
        e.preventDefault();
        $(".modal").fadeOut(function () {
            $("body").css("overflow", "auto");
        });
    });

    //TODO:: AJAX SETUP
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    // $('.header__icons-item.login').on('click', function (e) {
    //     e.preventDefault()
    //     alert()
    //
    //     $.ajax({
    //         type: "GET",
    //         dataType: 'json',
    //         url: '/ajax/test',
    //         success: function (data) {
    //             console.log(data)
    //
    //         }
    //     })
    // })

    $('#login form').on('submit', function (e) {
        e.preventDefault();
        let $this = $(this);
        let data = $($this).serialize();
        let url = $($this).attr('action');
        $(`#login form input`).removeClass('error')

        $.ajax({
            method: 'post',
            data: data,
            url: url,
            success: function (response) {
                console.log(response);
                alert('ok');
            },
            error:function (error) {
                console.log(error)
                if(error.responseJSON.errors){
                    $.each(error.responseJSON.errors, function (key, value) {
                        $(`#login form input[name="${key}"]`).addClass('error')
                    });
                }

            }
        })
    })

    $('.addCategory').on('submit', function (e) {
        e.preventDefault()
        let $this = $(this);
        let data = $($this).serialize();
        let url = $($this).attr('action');
        $(`.addCategory input`).removeClass('error')
        $.ajax({
            method: 'post',
            data: data,
            url: url,
            success: function (response) {
                let html = `<tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="pid-01">
                                            <label class="custom-control-label" for="pid-01"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a href="#" class="project-title">
                                            <div class="user-avatar sq bg-purple"><img src="http://127.0.0.1:8000/default.png" alt=""></div>
                                            <div class="project-info">
                                                <h6 class="title">${response.name}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col tb-col-xxl">
                                        <span>${response.name_ru}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <span> ${response.name_arm}</span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="http://127.0.0.1:8000/categories/${response.id}/edit"><em class="icon ni ni-edit"></em><span>Редактировать</span></a></li>
                                                            <li>
                                                                <form action="http://127.0.0.1:8000/categories/${response.id}" method="post">
                                                                    <input type="hidden" name="_token" value="ebydy3DXDguszBxbdAgzdcQRDDBBP5xfeUeUHS7o">                                                                                        <input type="hidden" name="_method" value="DELETE">                                                                                        <button type="submit" class="btn"><em class="icon ni ni-trash"></em><span>Удалить </span></button>
                                                                </form>
                                                              </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>`
                $('table tbody').append(html)
                $(".modal").fadeOut(function () {
                    $("body").css("overflow", "auto");
                });
            },
            error: function (error) {
                console.log(error.responseJSON)
                $.each(error.responseJSON.errors, function (key, value) {
                    $(`.addCategory input[name="${key}"]`).addClass('error')
                });
            }
        })
    })

    $('.catalog').on('click',function (e) {
        e.preventDefault();
        let $this = $(this)
        if($this.hasClass('category-close')){
            $this.removeClass('category-close')
            $this.addClass('category-open')
            $this.parent().children('ul').stop().slideDown(300)
        }else{
            $this.removeClass('category-open')
            $this.addClass('category-close')
            $this.parent().children('ul').stop().slideUp(300)
        }


    })
})

