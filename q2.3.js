
function reverseInt(n)
{
    
	n = n + "";
	return n.split("").reverse().join("");
}
console.log(Number(reverseInt(32243)));

