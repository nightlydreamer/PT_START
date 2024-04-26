var count = 0
document.getElementById('myButton').onclick = function() {
    count++;
    if (count % 2 == 0) {
        document.getElementById('demo').innerHTML = "";
    } else {
        var img = document.createElement('img');
        img.src = 'https://i.pinimg.com/236x/c8/cc/24/c8cc24bba37a25c009647b8875aae0e3.jpg';
        document.getElementById('demo').appendChild(img);
    }
}