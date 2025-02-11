const firebaseConfig = {
    apiKey: "AIzaSyCk_NOhMpScWykf7OWYBBRHmkhU7GZ28w4",
    authDomain: "qurankarim-fbf7f.firebaseapp.com",
    projectId: "qurankarim-fbf7f",
    storageBucket: "qurankarim-fbf7f.firebasestorage.app",
    messagingSenderId: "1045814127727",
    appId: "1:1045814127727:web:66213a7d8f2b9199c3719a",
    measurementId: "G-6C0LWLS9R6"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  const db = firebase.database();
