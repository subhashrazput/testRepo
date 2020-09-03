<!doctype html>
<script src="https://cdn.jsdelivr.net/npm/phonepesdk-web@1.0.5/phonepesdk.js"></script>
<!-- <script  src="./phonepesdk-web/phonepesdk.js"></script> -->
<script>
var ua = navigator.userAgent.toLowerCase();
if (/phonepe/i.test(ua)) {
PhonePe.PhonePe.build(PhonePe.Constants.Species.web).then((sdk) => {
    sdk.fetchAuthToken().then((res) => {
    console.log(JSON.stringify(res.grantToken));
        //console.log("Grant token data received = " + res)
        //alert(res)
    }).catch((err) => {
        console.log("Error occurred while fetching the grant token: " + err);
        alert(err);
    })
});
} 





</script>

