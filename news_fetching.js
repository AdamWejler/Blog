function frame(idNumber, title, content){
	var frame = '<p><b style="font-size: 25px;"> | ' +title+ ' |</b><br> News number: '+(idNumber+1)+'</p>';
	frame += '<p style="font-size: 17px; margin-right: 100px; margin-left: 100px;"> '+content+'</p><br><br>';
	return frame;
}

var content = "";




content = frame(0, "Przykładowy tytuł 1", "Treść jabsngvbsakdjfvbjksgd ansjlfa  hblk ablhabslkhgbfaj bk jh bl ablskjb k.b lakjsbn ahbak sbfkjhabsk jhbkajs f") + frame(1, "Test 2", "sdfhs shdgf sdf d");
document.getElementById("newslist").innerHTML = content;