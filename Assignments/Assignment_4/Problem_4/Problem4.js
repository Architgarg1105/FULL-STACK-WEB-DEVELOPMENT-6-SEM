aTag = document.querySelectorAll("a");
arr = []
for (i=0; i<aTag.length; i++)
{
    link = aTag[i].href;
    arr.push([link]);
};
output()
function output()
{
    ans = '<table><th>Links</th><tbody>';
    for (i=0; i<arr.length; i++)
            ans =ans + '<tr><td>'+ arr[i] + '</td><tr>';
    w = window.open("");
    w.document.write(ans); 
}
