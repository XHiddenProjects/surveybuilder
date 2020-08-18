if('serviceWorker' in navigator){
	window.addEventListener('load', () => {
		navigator.serviceWorker
			.register('./serviceworker.js')
			.then(reg => console.log('Service Worker: register'))
			.catch(err => console.log('Service Worker: Error: ${err}'))
	});
}

let cacheName = "v16";
let cacheAssets = [
"Home.php",
"/SurveyBuilder/Builder/SurveyBuilder.html",
"/SurveyBuilder/Builder/FormInsert.css",
"/SurveyBuilder/Builder/SurveyBuilder.css",
"/SurveyBuilder/Builder/InsertItems.js",
"/SurveyBuilder/Builder/SurveyBuilder.js",
"/SurveyBuilder/Builder/contact.php"
];


//Call event
self.addEventListener('install', (e) => {
	console.log("Service Worker Installed");
	
	e.waitUntil(
	caches 
	.open(cacheName)
	.then(cache => {
		console.log("Service Worker: Cache files");
		cache.addAll(cacheAssets);
	})
	.then(() => self.skipWaiting())
	);
});

//Call activate 

self.addEventListener('activate', e =>{
	console.log("Service Worker: Activate");
	//remove unwanted cache
	e.waitUntil(
	caches.keys().then(cacheName => {
		return Promise.all(
		cacheName.map(cache => {
			if(cache !== cacheName){
				console.log("Service Worker: Clearing out old cache");
				return caches.delete(cache);
			}
		})
		)
	})
	);
});

//Fetch 
self.addEventListener("fetch", e => {
	console.log('Service Worker: Fetching');
	e.respondWith(
	fetch(e.request)
	 .then(res => {
		 const resClone = res.clone();
		 
		 caches
		  .open(cacheName)
		  .then(cache => {
			  cache.put(e.request, resClone);
		  });
		  return res;
	 }).catch(err => caches.match(e.request).then(res => res))
	);
});