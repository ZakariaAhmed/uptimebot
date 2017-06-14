 $(document).ready(function(){
var arrTime = ['Every Minute', 'Every 2 Minutes', 'Every 3 Minutes', 'Every 4 Minutes', 5];
var arrId = new Array(23);
var valueArr = [0, 1, 2, 3, 4, 5, 6];
var option = '';

for (var i=0;i<arrId.length;i++){
	option += '<option value="'+ arrId[i] + '">' + arrTime[i] + '</option>';
}
$('#items').append(option);

var value = $( "#items option:selected" ).text();
var realv = $('select[name=selector]').val();
console.log(value);

$('#items').on('change', function() {
    
  alert(valueArr[0]);
});

});


