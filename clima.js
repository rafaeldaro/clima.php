function getClima() {
    $.ajax({
        method: 'get',
        crossDomain: true,
        url: 'http://api.openweathermap.org/data/2.5/weather?id=3468879&appid=3d74c0cc7d26fe20f2699fb0f5261488',
        dataType: 'json',
        success: function (data) {
           
            temperatura = data.main.temp - 273;
            var tempFormatada = temperatura.toFixed(2).split('.');
            $('#temperatura').html(tempFormatada+"º");
           
            temperaturaMax = data.main.temp_max - 273;
            var tempFormatadaMax = temperaturaMax.toFixed(2).split('.');
            $('#temperaturaMax').html(tempFormatadaMax+"º");
           
            temperaturaMin = data.main.temp_min - 273;
            var tempFormatadaMin = temperaturaMin.toFixed(2).split('.');
            $('#temperaturaMin').html(tempFormatadaMin+"º");
           
            umidade = data.main.humidity;
            $('#umidade').html(umidade + "%");
           
           
            pressao = data.main.pressure;
            $('#pressao').html(pressao + "Hg");
            
           
           
            vento = data.wind.speed;
            $('#vento').html(vento + "Km");
            
            
            
            var dataAmanhecer = new Date(data.sys.sunrise*1000);
            var descDataAmanhecer =
            dataAmanhecer.getHours()+':'+dataAmanhecer.getMinutes();
            $('#amanhecer').html(descDataAmanhecer);
            
            
             var dataPorDoSol = new Date(data.sys.sunset*1000);
            var descDataPorDoSol =
            dataPorDoSol.getHours()+':'+dataPorDoSol.getMinutes();
            $('#anoitecer').html(descDataPorDoSol);
    
           
           
            descricao = traduzirDescricao(data.weather[0].description);
            $('#situacao').html(descricao);
           
           
           
        },
       
        error: function (argument) {
            alert('Falha ao obter dados!');
        }
    });
}

function traduzirDescricao(descricao){
   
    descricaoTraduzida = "";
   
    if (descricao == "clear sky"){  
        descricaoTraduzida ="Céu Limpo";
       
    } else if (descricao == "few clouds"){
        descricaoTraduzida = "Poucas Nuvens";
       
    }else if (descricao == "scattered clouds"){
        descricaoTraduzida = "Nuvens dispersas";
       
    }else if (descricao == "broken clouds"){
        descricaoTraduzida = "Parcialmente Nublado";
       
    }else if (descricao == "shower rain"){
        descricaoTraduzida = "Chuva Leve";
       
    }else if (descricao == "rain"){
        descricaoTraduzida = "Chuva";
       
    }else if (descricao == "thunderstorm"){
        descricaoTraduzida = "Trovoada";
       
    }else if (descricao == "snow"){
        descricaoTraduzida = "Neve";
       
    }else if (descricao == "mist"){
        descricaoTraduzida = "Névoa";
    }
    return descricaoTraduzida;
}


window.onload = function () {
    getClima();
};