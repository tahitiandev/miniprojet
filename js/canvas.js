var canvas = document.querySelector('canvas');

canvas.width = window.innerWidth;  //largeur de la fenetre
canvas.height = window.innerHeight; // hauteur de la fenetre

var c = canvas.getContext('2d');


/*
c.fillStyle = 'rgba(255,0,0,0.5)'; //modifie la couleur du premier carre
c.fillRect(100, 100, 100, 100);     //ici, on doit preciser la position en X et en y de notre rectangle ainsi que sa "hauteur" et que sa largeur
c.fillStyle = 'rgba(0,0,255,0.5)';
c.fillRect(400, 100, 100, 100); // dans ce cas, on a plustôt un carré de 100*100
c.fillStyle = 'rgba(0,255,0,0.5)';
c.fillRect(300, 300, 100, 100);
console.log(canvas);
*/


// Line

/*
c.beginPath();
c.moveTo(50, 300);
c.lineTo(300, 100);
c.lineTo(400, 300);
c.strokeStyle = "rgb(250, 52, 163)"; // modifie la couleur de la "ligne"
c.stroke();
*/


// Arc / Circle


/*c.beginPath(); // NE PAS oublier les PARENTHESES
// il ne faut pas oublier de mettre l'instruction sinon on aura pas exactement le tracer souhaiter ... Par exemple ici, la ligne serrais venue //"toucher" le cercle ... Et ce n'est pas ce qu'on veux
c.arc(300, 300, 30, 0, Math.PI * 2, false);
//pour un cercle, il y a toujours X et Y pour savoir où on veut le positionner PUIS le rayon du cercle PUIS l'angle de début et de fin de cercle //(s'il est complet ou pas en gros, de 0 a PI*2) ET ENFIN la direction dans lequel l'arc doit être 
//(se dessiner (dans le sens trigo ou anti-trigo))
c.strokeStyle = 'blue'; //couleur de u cercle
c.stroke();*/


// repetition de cercle avec une condition FOR
/*
for (var i =0; i < 500; i++) {
    var x = Math.random() * window.innerWidth; // attribut une valeur aléatoire a X qui positinnera le cercle aléatoirement sur les ordonnees
    var y = Math.random() * window.innerHeight; // attribut une valeur aléatoire a Y qui positinnera le cercle aléatoirement sur les abscisces
    c.beginPath();
    c.arc(x, y, 30 ,0, Math.PI * 2, false);
    c.strokeStyle = 'blue';
    c.stroke();
}
*/

/*
var x = Math.random() * innerWidth;
var y = Math.random() * innerHeight;
var dx = (Math.random() - 0.5) * 25; // le * 25 permet de regler la vitesse a laqualle le cercle "bouge"
var dy = (Math.random() - 0.5) * 25;
var radius = 30;
*/

 function Circle(x, y ,dx ,dy, radius){
     this.x = x;
     this.y = y;
     this.dx = dx;
     this.dy = dy;
     this.radius = radius;
     
     this.draw = function() {
        c.beginPath();
        c.arc(this.x, this.y, this.radius , 0, Math.PI * 2, false);
        c.strokeStyle = 'rgb(0, 48, 48, 1)';
        c.stroke();
        c.fill();
         c.fillStyle = 'rgba(0, 48, 48, 0.5)';
         
     }
     
     this.update = function(){
            if (this.x + this.radius > innerWidth || this.x - this.radius < 0 ) {
                this.dx = -this.dx;
        }

        if (this.y + this.radius > innerHeight || this.y - this.radius < 0 ) {
            this.dy = -this.dy;
            }
            this.x += this.dx;
            this.y += this.dy;
            
            this.draw();
     }
     
 }

var circleArray = [];

for (var i = 0; i < 250; i++) {
    var x = Math.random() * (innerWidth - radius * 2) + radius;
    var y = Math.random() * (innerHeight - radius * 2) + radius;
    var dx = (Math.random() - 0.5); // le "*25" permet de regler la vitesse a laqualle le cercle "bouge"
    var dy = (Math.random() - 0.5);
    var radius = 30;
    circleArray.push(new Circle(x, y, dx,dy, radius));
    
}

function animate() {
    requestAnimationFrame(animate);
    c.clearRect(0, 0, innerWidth, innerHeight);

  for(var i = 0; i < circleArray.length; i++){
    circleArray[i].update();
     
  }
    

}
 animate();


























