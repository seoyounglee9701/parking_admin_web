// Parse the URL parameter
function get_query(){
    var args={}; // 빈 객체를 선언
    var query = location.search.substring(1); // 쿼리스트링을 얻어온 후 ? 제거함
    var pairs = query.split("&"); // & 문자열을 기준 삼아 배열로 분리
    for(var i=0; i<pairs.length; i++){ // 분리된 부분마다
        var pos=pairs[i].indexOf('='); // '이름-값' 패턴을 찾음
        if(pos === -1){ 
            continue; // 찾을 수 없다면 스킵
        }
        // 이름을 추출
        var name = pairs[i].substring(0, pos);
        var value = pairs[i].substring(pos+1);
        value=decodeURIComponent(value);
        args[name] = value;
    }
    return args;
   }