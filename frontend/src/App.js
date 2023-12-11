import { useEffect, useState } from "react";

function App() {
  const [shape, setShape] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    async function getData() {
      const response = await fetch("http://localhost/");
      const data = await response.json();
      
      setShape(data);
      setLoading(false);
    }

    getData();
  }, []);
  
  return (
    <></>
  );
}

export default App;
