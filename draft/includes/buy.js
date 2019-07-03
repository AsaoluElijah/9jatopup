
function buyAirtime(apiKey,price,network,phone) {
    network = network + '_custom';
    $.ajax({
        url: `https://quickrecharge.com.ng/api/v2/airtime/?api_key=${apiKey}&product_code=${network}&phone=${phone}&amount=${price}`,
        method: 'post',
        success: function (data) {
            return data;
        }
    });
}
function buyData(apiKey,price,network,phone) {
    $.ajax({
        url: `https://quickrecharge.com.ng/api/v2/datashare/?api_key=${apiKey}&product_code=data_share_${price}&phone=${phone}`,
        method: 'post',
        success: function (data) {
            return data;
        }
    });
}