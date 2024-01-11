importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
   
firebase.initializeApp({
   apiKey: "AIzaSyDSXRwiceRxVbxIEqytedGdd8LGrDct6pM",
   projectId: "push-notification-392a7",
     messagingSenderId: "436770792839",
    appId: "1:436770792839:web:4ead0486bff7ed6f381f22"
});
  
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function({data:{title,body,icon}}) {
    return self.registration.showNotification(title,{body,icon});
});