<%
    Dim oShell
    Set oShell = Server.CreateObject("Wscript.Shell")
    oShell.Run "git pull"
    Set oShell = Nothing
%>
