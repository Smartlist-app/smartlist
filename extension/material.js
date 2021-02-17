/*var buttons = document.getElementsByClassName('button');

Array.prototype.forEach.call(buttons, function(b){
  b.addEventListener('mousedown', createRipple);
})

function createRipple(e)
{
  if(this.getElementsByClassName('ripple').length > 0)
    {
      this.removeChild(this.childNodes[1]);
    }
  
  var circle = document.createElement('div');
  this.appendChild(circle);
  
  var d = Math.max(this.clientWidth, this.clientHeight);
  circle.style.width = circle.style.height = d + 'px';
  
  circle.style.left = e.clientX - this.offsetLeft - d / 2 + 'px';
  circle.style.top = e.clientY - this.offsetTop - d / 2 + 'px';
  
  circle.classList.add('ripple');
}*/
document.getElementById("a").addEventListener("click", myFunction);
function myFunction() {
    document.getElementById("myCheck").click(); // Click on the checkbox
  }
  document.getElementById("b").addEventListener("click", myFunctiona);
  function myFunctiona() {
      document.getElementById("myChecka").click(); // Click on the checkbox
    }
  