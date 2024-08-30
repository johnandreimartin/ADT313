
import './App.css';

import Name from './component/Name/Name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';


function App(){
  const userInformation = {
firstName: 'Andrei',
lastName: 'Martin',
Section: "IT-3A",
Description:"ANG HIRAP MABUHAY HUHU"

  }

  return (
    <div className="App"> 
    <Name firstName={userInformation.firstName}lastName={userInformation.lastName}/>
    <Section Section={userInformation.Section}/>
    <Description Description={userInformation.Description}/>

    
    </div>
  );
}

export default App;
