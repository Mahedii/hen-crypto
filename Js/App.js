import logo from './logo.svg';
import './App.css';
import {GoogleLogin} from 'react-google-login'

function App() {
 const responseGoogle = response => {
  console.log(response)
 } 
  const responseError = error => {
    console.log(error)
  }


  return (
    <div>
  
     <div className="App">
      <h1> Goole Kalender API</h1>
     </div>
     <div>
      <GoogleLogin clientId='322416455542-nmbhinn2pjl9921s538gd312b8rp26i3.apps.googleusercontent.com' buttonText='Teken in & gee Kalender toestemming' onSuccess={responseGoogle} onFailure={responseError} 
      cookiePolicy={'single_host_origin'}
      // This is important
      responseType='code'
      accessType='offline'
      scope='openid email profile htps//www.googleapis.com/auth/calendar '
      />


     </div>
    </div>
  );
}

export default App;
