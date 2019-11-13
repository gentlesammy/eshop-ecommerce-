




urlshort('www.whogohost.com');

function urlshort(url){
fetch("https://url-shortener-service.p.rapidapi.com/shorten", {
	"method": "POST",
	"headers": {
		"x-rapidapi-host": "url-shortener-service.p.rapidapi.com",
		"x-rapidapi-key": "be853e86fcmsh3dc101b1d73241cp1bd0dejsn5f399c1cfea0",
		"content-type": "application/x-www-form-urlencoded"
	},
	"body": {
		"url": url
	}
})
.then(response => {
	console.log(response);
})
.catch(err => {
	console.log(err);
});
}