<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
canvas {
    border:1px solid #d3d3d3;
    background-color: #f1f1f1;
    background:url(/images/mixspaceearth.png)
}
</style>
</head>
<body onload="startGame()">
<script>
var myGamePiece;
var myObstacles = [];
var myScore;
var showpos;

function startGame() {
    myGamePiece = new component(30, 30, "red", 700, 490);
    myGamePiece.gravity = 0.2;
    myGamePiece.acceleratehorizontal=0;
    myScore = new component("30px", "Consolas", "black", 210, 55, "text");
    showpos= new component("30px", "Consolas", "black", 10, 22, "text");
    myGameArea.start();
    myGamePiece2 = new component(30, 30, "blue", 200, 490);
    myGamePiece2.gravity = 0.8;
    myGamePiece2.acceleratehorizontal=0;
}

var myGameArea = {
    canvas : document.createElement("canvas"),

    start : function() {
        this.canvas.width = 920;
        this.canvas.height = 520;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.frameNo = 0;
        this.interval = setInterval(updateGameArea, 20);
        },
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

function component(width, height, color, x, y, type) {
    this.type = type;
    this.score = 0;
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = -10;    
    this.x = x;
    this.y = y;
    this.gravity = 10;
    this.gravitySpeed = 0;
    this.update = function() {
        ctx = myGameArea.context;
        if (this.type == "text") {
            ctx.font = this.width + " " + this.height;
            ctx.fillStyle = color;
            ctx.fillText(this.text, this.x, this.y);

        } else {
            ctx.fillStyle = color;
            ctx.fillRect(this.x, this.y, this.width, this.height);
        }
    }
    this.newPos = function() {
        this.gravitySpeed += this.gravity;
        this.speedX+=this.acceleratehorizontal;
        this.x += this.speedX;
        this.y += this.speedY + this.gravitySpeed;
        this.hitBottom();
    }
    this.hitBottom = function() {
        var rockbottom = myGameArea.canvas.height - this.height;
        if (this.y > rockbottom) {
            this.y = rockbottom;
            this.gravitySpeed = 0;
    		this.speedY = 0;    
        }
    }
    this.crashWith = function(otherobj) {
        var myleft = this.x;
        var myright = this.x + (this.width);
        var mytop = this.y;
        var mybottom = this.y + (this.height);
        var otherleft = otherobj.x;
        var otherright = otherobj.x + (otherobj.width);
        var othertop = otherobj.y;
        var otherbottom = otherobj.y + (otherobj.height);
        var crash = true;
        if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
            crash = false;
        }
        return crash;
    }
}

function updateGameArea() {

    var x, height, gap, minHeight, maxHeight, minGap, maxGap;
    myGameArea.clear();
    myGameArea.frameNo += 1;
 //   myScore.text="a_x "+myGamePiece.acceleratehorizontal+" a_y "+myGamePiece.gravity;
 myScore.text="";
    myScore.update();
    myGamePiece.newPos();
    myGamePiece2.newPos();
     showpos.text="";
 //   showpos.text="Position = "+myGamePiece.x.toFixed(2)+", "+myGamePiece.y.toFixed(2);
    showpos.update();
    myGamePiece.update();
    myGamePiece2.update();


}

</script>
<div>
<input type="button" value = "Let them jump!" onclick="myGamePiece2.speedY = -10;myGamePiece.speedY=-10; ">
</div>
</body>
</html>
