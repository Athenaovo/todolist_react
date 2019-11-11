//console.log($('#myvid')[0]);
var vidsize=0;
function assignsize(data){
    vidsize = data;
    console.log(vidsize);
    downloadWolverineFile('#Wolv_Media_Library_mobilebutton_126', vidsize, url, filename, storename, progresslabel, mediaUploadSuccess);
};

$.get('https://host.tucknologies.com/~wolverinewat/data_scripts/get_file_size.php?year=2019&month=07&fname=Water_test_card_low_res.mp4',function(data) {
    assignsize(data);
});
//https://host.tucknologies.com/~wolverinewat/data_scripts/wolverine_download_media.php?year=2019&month=04&fname=HW_Residential_MAIN_FILTER_EDIT_2.mp4
var url = "https://host.tucknologies.com/~wolverinewat/wp-content/uploads/2019/07/Water_test_card_low_res.mp4";
var filename = "Water_test_card_low_res.mp4";
var storename = "media_watertest_card_low";
var progresslabel = Apperyio("WaterTest_Card_Low");





-------------------
    localStorage.setItem('videoclicked',localStorage.getItem('media_watertest_card_low'));
//$('#mediasrc').attr("src",'https://host.tucknologies.com/~wolverinewat/wp-content/uploads/2019/04/HW_Residential_MAIN_FILTER_EDIT_2.mp4');
$('#mediasrc').attr('src',localStorage.getItem('videoclicked'));
//window.location.reload();
$('#mediavid')[0].load();


var vid = document.getElementById("mediavid");
vid.play();



media_Pure_Gentle_Dealer
media_pureGentle_Hardwater_English
media_pureGentle_Hardwater_Spanish
media_watertest_card_superlow
media_watertest_card_high
media_watertest_card_low