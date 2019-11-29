function showUTC(){
var heure = new Date();
var heures = heure.getUTCHours()+"h"+heure.getUTCMinutes()+"min"+heure.getUTCSeconds()+"secUTC";

document.write(heures);
}
