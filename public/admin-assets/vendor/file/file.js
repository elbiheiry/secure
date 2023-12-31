/*
 * jquery-filestyle
 * doc: http://markusslima.github.io/jquery-filestyle/
 * github: https://github.com/markusslima/jquery-filestyle
 *
 * Copyright (c) 2017 Markus Vinicius da Silva Lima
 * Version 2.1.0
 * Licensed under the MIT license.
 */
!(function (e) {
    "use strict";
    var t = 0,
        i = function (t, i) {
            (this.options = i), (this.$elementjFilestyle = []), (this.$element = e(t));
        };
    i.prototype = {
        clear: function () {
            this.$element.val(""), this.$elementjFilestyle.find(":text").val(""), this.$elementjFilestyle.find(".count-jfilestyle").remove();
        },
        destroy: function () {
            this.$element.removeAttr("style").removeData("jfilestyle").val(""), this.$elementjFilestyle.remove();
        },
        dragdrop: function (e) {
            return e !== !0 && e !== !1 ? this.options.dragdrop : void (this.options.dragdrop = e);
        },
        disabled: function (e) {
            if (e === !0) this.options.disabled || (this.$element.attr("disabled", "true"), this.$elementjFilestyle.find("label").attr("disabled", "true"), (this.options.disabled = !0));
            else {
                if (e !== !1) return this.options.disabled;
                this.options.disabled && (this.$element.removeAttr("disabled"), this.$elementjFilestyle.find("label").removeAttr("disabled"), (this.options.disabled = !1));
            }
        },
        buttonBefore: function (e) {
            if (e === !0) this.options.buttonBefore || ((this.options.buttonBefore = !0), this.options.input && (this.$elementjFilestyle.remove(), this.constructor(), this.pushNameFiles()));
            else {
                if (e !== !1) return this.options.buttonBefore;
                this.options.buttonBefore && ((this.options.buttonBefore = !1), this.options.input && (this.$elementjFilestyle.remove(), this.constructor(), this.pushNameFiles()));
            }
        },
        input: function (e) {
            if (e === !0) this.options.input || ((this.options.input = !0), this.$elementjFilestyle.find("label").before(this.htmlInput()), this.$elementjFilestyle.find(".count-jfilestyle").remove(), this.pushNameFiles());
            else {
                if (e !== !1) return this.options.input;
                if (this.options.input) {
                    (this.options.input = !1), this.$elementjFilestyle.find(":text").remove();
                    var t = this.pushNameFiles();
                    t.length > 0 && this.$elementjFilestyle.find("label").append(' <span class="count-jfilestyle">' + t.length + "</span>");
                }
            }
        },
        text: function (e) {
            return void 0 === e ? this.options.text : ((this.options.text = e), void this.$elementjFilestyle.find("label span").html(this.options.text));
        },
        theme: function (e) {
            return void 0 === e
                ? this.options.theme
                : (console.log(this.$elementjFilestyle.attr("class").replace(/.*(jfilestyle-theme-.*).*/, "$1")),
                  this.$elementjFilestyle.removeClass(this.$elementjFilestyle.attr("class").replace(/.*(jfilestyle-theme-.*).*/, "$1")),
                  (this.options.theme = e),
                  this.$elementjFilestyle.addClass("jfilestyle-theme-" + this.options.theme),
                  void 0);
        },
        inputSize: function (e) {
            return void 0 === e ? this.options.inputSize : ((this.options.inputSize = e), void this.$elementjFilestyle.find(":text").css("width", this.options.inputSize));
        },
        placeholder: function (e) {
            return void 0 === e ? this.options.placeholder : ((this.options.placeholder = e), void this.$elementjFilestyle.find(":text").attr("placeholder", e));
        },
        htmlInput: function () {
            return this.options.input ? '<input type="text" style="width:' + this.options.inputSize + '" placeholder="' + this.options.placeholder + '" disabled> ' : "";
        },
        pushNameFiles: function () {
            var e = "",
                t = [];
            void 0 === this.$element[0].files ? (t[0] = { name: this.$element.value }) : (t = this.$element[0].files);
            for (var i = 0; i < t.length; i++) e += t[i].name.split("\\").pop() + ", ";
            return "" !== e ? this.$elementjFilestyle.find(":text").val(e.replace(/\, $/g, "")) : this.$elementjFilestyle.find(":text").val(""), t;
        },
        constructor: function () {
            var i = this,
                n = "",
                l = i.$element.attr("id");
            ("" !== l && l) || ((l = "jfilestyle-" + t), i.$element.attr({ id: l }), t++),
                (n = '<span class="focus-jfilestyle"><label for="' + l + '" ' + (i.options.disabled ? 'disabled="true"' : "") + "><span>" + i.options.text + "</span></label></span>"),
                i.options.buttonBefore === !0 ? (n += i.htmlInput()) : (n = i.htmlInput() + n),
                (i.$elementjFilestyle = e(
                    '<div class="jfilestyle ' +
                        (i.options.input ? "jfilestyle-corner" : "") +
                        " " +
                        (this.options.buttonBefore ? " jfilestyle-buttonbefore" : "") +
                        " " +
                        (i.options.theme ? "jfilestyle-theme-" + i.options.theme : "") +
                        '"><div name="filedrag"></div>' +
                        n +
                        "</div>"
                )),
                i.$elementjFilestyle
                    .find(".focus-jfilestyle")
                    .attr("tabindex", "0")
                    .keypress(function (e) {
                        return 13 === e.keyCode || 32 === e.charCode ? (i.$elementjFilestyle.find("label").click(), !1) : void 0;
                    }),
                i.$element.css({ position: "absolute", clip: "rect(0px 0px 0px 0px)" }).attr("tabindex", "-1").after(i.$elementjFilestyle),
                i.options.disabled && i.$element.attr("disabled", "true"),
                i.$elementjFilestyle.find('[name="filedrag"]').css({ position: "absolute", width: "100%", height: i.$elementjFilestyle.height() + "px", "z-index": -1 }),
                i.$element.change(function () {
                    var e = i.pushNameFiles();
                    0 == i.options.input
                        ? 0 == i.$elementjFilestyle.find(".count-jfilestyle").length
                            ? i.$elementjFilestyle.find("label").append(' <span class="count-jfilestyle">' + e.length + "</span>")
                            : 0 == e.length
                            ? i.$elementjFilestyle.find(".count-jfilestyle").remove()
                            : i.$elementjFilestyle.find(".count-jfilestyle").html(e.length)
                        : i.$elementjFilestyle.find(".count-jfilestyle").remove(),
                        i.options.onChange(e);
                }),
                window.navigator.userAgent.search(/firefox/i) > -1 &&
                    this.$elementjFilestyle.find("label").click(function () {
                        return i.$element.click(), !1;
                    }),
                e(document)
                    .on("dragover", function (t) {
                        t.preventDefault(), t.stopPropagation(), i.options.dragdrop || e('[name="filedrag"]').css("z-index", "9");
                    })
                    .on("drop", function (t) {
                        t.preventDefault(), t.stopPropagation(), i.options.dragdrop || e('[name="filedrag"]').css("z-index", "-1");
                    }),
                i.$elementjFilestyle
                    .find('[name="filedrag"]')
                    .on("dragover", function (e) {
                        e.preventDefault(), e.stopPropagation();
                    })
                    .on("dragenter", function (e) {
                        e.preventDefault(), e.stopPropagation();
                    })
                    .on("drop", function (t) {
                        if (t.originalEvent.dataTransfer && !i.options.disabled && i.options.dragdrop && t.originalEvent.dataTransfer.files.length) {
                            t.preventDefault(), t.stopPropagation(), (i.$element[0].files = t.originalEvent.dataTransfer.files);
                            var n = i.pushNameFiles();
                            0 == i.options.input
                                ? 0 == i.$elementjFilestyle.find(".count-jfilestyle").length
                                    ? i.$elementjFilestyle.find("label").append(' <span class="count-jfilestyle">' + n.length + "</span>")
                                    : 0 == n.length
                                    ? i.$elementjFilestyle.find(".count-jfilestyle").remove()
                                    : i.$elementjFilestyle.find(".count-jfilestyle").html(n.length)
                                : i.$elementjFilestyle.find(".count-jfilestyle").remove(),
                                e('[name="filedrag"]').css("z-index", "-1");
                        }
                    });
        },
    };
    var n = e.fn.jfilestyle;
    (e.fn.jfilestyle = function (t, n) {
        var l = "",
            s = this.each(function () {
                if ("file" === e(this).attr("type")) {
                    var s = e(this),
                        o = s.data("jfilestyle"),
                        a = e.extend({}, e.fn.jfilestyle.defaults, t, "object" == typeof t && t);
                    o || (s.data("jfilestyle", (o = new i(this, a))), o.constructor()), "string" == typeof t && (l = o[t](n));
                }
            });
        return void 0 !== typeof l ? l : s;
    }),
        (e.fn.jfilestyle.defaults = { text: "Choose file", input: !0, disabled: !1, buttonBefore: !1, inputSize: "200px", placeholder: "", dragdrop: !0, theme: "default", onChange: function () {} }),
        (e.fn.jfilestyle.noConflict = function () {
            return (e.fn.jfilestyle = n), this;
        }),
        e(function () {
            e(".jfilestyle").each(function () {
                var t = e(this),
                    i = {
                        text: t.attr("data-text"),
                        input: "false" !== t.attr("data-input"),
                        disabled: "true" === t.attr("data-disabled"),
                        buttonBefore: "true" === t.attr("data-buttonBefore"),
                        inputSize: t.attr("data-inputSize"),
                        placeholder: t.attr("data-placeholder"),
                        theme: t.attr("data-theme"),
                        dragdrop: "false" !== t.attr("data-dragdrop"),
                    };
                t.jfilestyle(i);
            });
        });
})(window.jQuery);
