function save() {
    let text = document.getElementById("textarea").value;
    document.cookie = text;
}
function load() {
    document.getElementById("textarea").value = document.cookie;
}