function pilih()
{
    var bio = document.getElementById("bio");
    var pilihan = document.getElementById("pilihan");
    var option = document.createElement("option");

option.text = bio.options[bio.selectedIndex].text;
try{
    pilihan.add(option,null);
}
catch(ex)
{
    pilihan.add(option);
}
}