const priceList = () => {
    let t = $(window),
        e = $(".estimates__menu"),
        s = $(".estimates__menu").height(),
        i = $(".estimates__menu_block"),
        o = $(".estimates__menu_block").height(),
        a = e.position().top,
        c = $(".estimates__content"),
        n = $(".estimates__sum"),
        l = c.position().top + c.height() + 90,
        m = t.scrollTop();

    function _(t, e) {
        let s, i, o = $("#calc_sum"),
            a = $(".calc_sum"),
            c = 0;
        "-" == e && (s = t.next(), i = s.val()), "+" == e && (s = t.prev(), i = s.val()), "=" == e && (s = t, i = s.val().replace(/\_/g, ""));
        let n = s.closest(".calc_row").find(".calc_price").text(),
            l = s.closest(".calc_row").find(".calc_sum");
        "-" == e && i > 0 && i--, "+" == e && i++, s.val(i), l.text(i * n), a.each((function (t, e) {
            c += Number.parseInt($(e).text())
        })), c = ("" + c).replace(/.+?(?=\D|$)/, (function (t) {
            return t.replace(/(\d)(?=(?:\d\d\d)+$)/g, "$1 ")
        })), o.text(c)
    }
    t.scroll((function (i) {
        m = t.scrollTop(), s = $(".estimates__menu").height(), o = $(".estimates__menu_block").height(), a = e.position().top, l = c.position().top + c.height() + 90;
        let _ = t.height() + m;
        (_ < c.position().top + 450 || _ > l + 90) && n.removeClass("fixed")
    })), $(window).width() > 9999 && t.scroll((function (t) {
        o + 100 < c.height() ? (a < m - 108 && (i.addClass("fixed"), i.css("margin-top", 0)), a > m - 108 && i.removeClass("fixed"), m + o > l && ($topPosition = l - m - o, i.css("margin-top", $topPosition))) : (i.removeClass("fixed"), i.css("margin-top", 0))
    })), $(".yellow_action_block .estimates__menu li, .estimatesContent .estimates__menu li").click((function () {
        l = c.position().top + c.height() + 90, o + 100 > c.height() && (i.removeClass("fixed"), i.css("margin-top", 0)), $(".estimates__menu li, .estimates__items").removeClass("active"), $(this).addClass("active"), $(".estimates__items").eq($(this).index()).addClass("active"), $("body,html").animate({
            scrollTop: $(".estimates__content").offset().top - 66
        }, 400)
    })), $(".estimatesPopup .estimates__menu li").click((function () {
        $(".estimates__menu li, .estimates__items").removeClass("active"), $(this).addClass("active"), $(".estimates__items").eq($(this).index()).addClass("active"), $(".estimates__content").animate({
            scrollTop: 0
        }, 400)
    })), $(".estimates_close").click((function () {
        $(".estimatesPopup").removeClass("is_active"), $("html").removeClass("is_popup")
    })), $(".estimatesPopup").click((function (t) {
        "estimatesPopup is_active" == t.target.className && ($(".estimatesPopup").removeClass("is_active"), $("html").removeClass("is_popup"))
    })), $(".go_estimatesPopup").click((function () {
        $(".estimatesPopup").addClass("is_active"), $("html").addClass("is_popup")
    })), $(".yellow_action").click((function () {
        $(this).toggleClass("hide"), $(".yellow_action_block").slideToggle()
    })), document.oninput = function () {
        var t = document.querySelector(".input_count");
        t.value = t.value.replace(/[^\d]/g, "")
    }, $(".minus_count").click((function () {
        _($(this), "-")
    })), $(".plus_count").click((function () {
        _($(this), "+")
    })), $(".input_count").keyup((function () {
        _($(this), "=")
    }))
};

export default priceList;