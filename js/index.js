///////////////////////////////////////
// JS pour la page d'accueil du site //
///////////////////////////////////////

// Enter The Wired Clique changement de vidéo de fond
let enter = document.querySelector("div.enterwired");

enter.addEventListener('click', () => {
    document.querySelector("div.enterwired").remove();

    document.querySelector(".back-vid").innerHTML =
        `<div class="back-vid">
        <video autoplay muted plays-inline class="back-vid">
            <source src="./img/video/back-vid-2.mp4" type="video/mp4">
        </video>
    </div>`;

    setTimeout(matrix, 4000);

    document.querySelector("ul").classList.add("show");
    document.querySelector(".page_show").classList.add("show");
})

// Matrix Background Effect
function matrix() {
    var canvas = document.getElementById('canvas'),
        ctx = canvas.getContext('2d'),
        canvas2 = document.getElementById('canvas2'),
        ctx2 = canvas2.getContext('2d'),
        // full screen dimensions
        cw = window.innerWidth,
        ch = window.innerHeight,
        charArr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'],
        maxCharCount = 100,
        fallingCharArr = [],
        fontSize = 10,
        maxColums = cw / (fontSize);
    canvas.width = canvas2.width = cw;
    canvas.height = canvas2.height = ch;


    function randomInt(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }

    function randomFloat(min, max) {
        return Math.random() * (max - min) + min;
    }

    function Point(x, y) {
        this.x = x;
        this.y = y;
    }

    let color = `rgb(${colorRand()},${colorRand()},${colorRand()})`;

    function colorRand() {
        return Math.floor(100 + Math.random() * 156);
    }
    const random_hex_color_code = () => {
        let n = (Math.random() * 0xfffff * 1000000).toString(16);
        return '#' + n.slice(0, 6);
    };

    Point.prototype.draw = function (ctx) {

        this.value = charArr[randomInt(0, charArr.length - 1)].toUpperCase();
        this.speed = randomFloat(1, 5);


        ctx2.fillStyle = color;
        ctx2.font = fontSize + "px san-serif";
        ctx2.fillText(this.value, this.x, this.y);

        ctx.fillStyle = color;
        ctx.font = fontSize + "px san-serif";
        ctx.fillText(this.value, this.x, this.y);



        this.y += this.speed;
        if (this.y > ch) {
            this.y = randomFloat(-100, 0);
            this.speed = randomFloat(2, 5);
        }
    }

    for (var i = 0; i < maxColums; i++) {
        fallingCharArr.push(new Point(i * fontSize, randomFloat(-1000, 0)));
    }


    var update = function () {

        ctx.fillStyle = "rgba(0,0,0,0.05)";
        ctx.fillRect(0, 0, cw, ch);

        ctx2.clearRect(0, 0, cw, ch);

        var i = fallingCharArr.length;

        while (i--) {
            fallingCharArr[i].draw(ctx);
            var v = fallingCharArr[i];
        }

        requestAnimationFrame(update);
    }

    update();
}