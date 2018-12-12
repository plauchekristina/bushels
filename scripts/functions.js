function pagePrint() {
    window.print();
}

function changeColor() {
    var inputbox_id = "colorInput";
    var inputbox = document.getElementById(inputbox_id);

    var div_id = "colorChanger"
    var div = document.getElementById(div_id);

    // We should verify values here before we use them...
    var color = inputbox.value;
    div.style.backgroundColor = color;

}

function newQuote() {
    var quotes = [
        'Be yourself; everyone else is already taken. - Oscar Wilde',
        'In three words I can sum up everything I have learned about life: it goes on.- Robert Frost',
        'An essential aspect of creativity is not being afraid to fail. - Edwin Land',
        'I am so clever that sometimes I do not understand a single word of what I am saying.- Oscar Wilde',
        'I used to think I was indecisive, but now I am not quite sure. - Author Unknown'
    ]

    var randomNumber = Math.floor(Math.random() * (quotes.length));
    document.getElementById('quoteDisplay').innerHTML = quotes[randomNumber];
}
//using these to change the background color for input onfocus
function targetInput(x) {
    x.style.backgroundColor = "lightblue";
}
function targetOutput(x) {
    x.style.backgroundColor = "white";
}

$(document).ready(function () {
    // get current URL path and assign 'active' class
    var pathname = window.location.pathname;
    $('.nav > li > a[href="' + pathname + '"]').parent().addClass('active');
})


