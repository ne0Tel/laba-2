let count = 0;

document.getElementById('myButton').onclick = function () {
  count++;

  if (count % 2 === 0) {
    document.getElementById("demo").innerHTML = "";
  } else {
    let img = document.createElement("img");
    img.src = "https://th.bing.com/th/id/R.a7795a7146413ed50d0488345fb13cf0?rik=mx4zT%2fdKo1Ml9g&riu=http%3a%2f%2ffotorelax.ru%2fwp-content%2fuploads%2f2020%2f12%2f20201227-Photos-of-cats-12_1-min.jpg&ehk=NYQoTmyiWtfmUvJIiOs4ZvXqbVukYCjff6v%2bbaZsUK8%3d&risl=&pid=ImgRaw&r=0";
    document.getElementById('demo').appendChild(img);
  }
}