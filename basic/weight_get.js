var ki,body,result;
ki=prompt("키?","0");
body=prompt("무게?","0");
result=(ki-100)*0.9;

if(result>body){
    document.write("저체중");
}else if (result<=body){
    document.write("과체중");
}