const API_KEY = `cee1c415f70019e01fc86868297a51a6`
const form = document.querySelector("form")
const search = document.querySelector("#search")
const weather = document.querySelector("#weather")


const getweather = async (city) =>{
    const url = `http://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${API_KEY}&units=metric`
    const response = await fetch(url);
    const data = await response.json()
    return showWeather (data)
}

const showWeather = (data) =>{
    if (data.cod == "404"){
        weather.innerHTML= `<h2>City Not Found<h2/>`
        return;
    }
    
    const celsiusTemp = data.main.temp.toFixed(1);
    const fahrenheitTemp = ((celsiusTemp * 9) / 5 + 32).toFixed(1);
    const location = `${data.name}`;
    const region = `${data.sys.country}`;
    const country = `${data.sys.country}`;
    const pressure = `${data.main.pressure} hPa`;
    const windKph = `${(data.wind.speed * 3.6).toFixed(1)} km/h`;
    const precipitation = `${data.clouds.all}%`;
    const windDirection = degToCompass(data.wind.deg);
 
    weather.innerHTML= `
    <div>
        <h2>${location}, ${region}, ${country}</h2>
        <h3>${celsiusTemp} ℃ / ${fahrenheitTemp} °F</h3>
        <h4> ${data.weather[0].main} </h4>
        <p>Pressure: ${pressure}</p>
        <p>Wind: ${windKph}, ${windDirection}</p>
        <p>Precipitation: ${precipitation}</p>
    </div>
    <div>
        <img src="https://openweathermap.org/img/wn/${data.weather[0].icon}.png" alt="">
    </div>
`
}

// Convert wind direction from degrees to compass direction
function degToCompass(num) {
    const val = Math.floor((num / 22.5) + 0.5);
    const arr = ["N", "NNE", "NE", "ENE", "E", "ESE", "SE", "SSE", "S", "SSW", "SW", "WSW", "W", "WNW", "NW", "NNW"];
    return arr[(val % 16)];
}

form.addEventListener(
    "submit",
    function(event) {
        getweather(search.value)
        event.preventDefault();
    }
)