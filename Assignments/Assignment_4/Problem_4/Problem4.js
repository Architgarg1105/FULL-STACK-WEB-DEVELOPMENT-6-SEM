// t=document.getElementsByName('q')[0] 
// t.value='html'
// s=document.getElementsByClassName('gNO89b')[0]
// s.click()

aTag = document.getElementsByTagName("a");
arr = []
for (i=0; i<aTag.length; i++)
{
    if(aTag[i].href.length != 0)
    {
        arr.push(aTag[i].href);
    }
};
ans = '';
for(i=0; i<arr.length; i++)
    ans =ans + arr[i] +'<br>';
w = window.open("");
w.document.write(ans); 
