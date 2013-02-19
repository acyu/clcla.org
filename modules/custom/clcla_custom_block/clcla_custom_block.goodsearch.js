function GoGoodSearch_1()
{
  var charityid = 894043;
  var siteURL = "clcla.org";
  var openNewWindow = true;
  var baseurl = "http://www.goodsearch.com/Search.aspx";
  var keywordsbox = document.getElementById("goodsearch_keywords_1");
  if (typeof keywordsbox != "undefined")
  {
    var keywords = escape(keywordsbox.value);
    var url = baseurl + "?Keywords=" + keywords;
    if (charityid > 0)
      url += "&CharityID=" + charityid;
    url += "&Partner=goodsearch_syn";
    url += "&typetag=" + escape(siteURL);
    if (openNewWindow)
      window.open(url,'SearchResults','height=700,width=900,location=1,status=1,toolbar=1,scrollbars=1,resizable=1');
    else
      window.location.href = url;
  }
}
function CatchEnter_1(e)
{
  var key1 = "13";
  var x = "";
  if (document.all)
  {
    var evnt = window.event;
    x = evnt.keyCode;
  }
  else
    x = e.keyCode;
  if (x == key1)
  {
    document.getElementById("goodsearch_submit_1").click();
    return false;
  }
  else
    return true;
}