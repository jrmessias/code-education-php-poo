Set oShell = CreateObject ("Wscript.Shell") 
Dim strArgs
iURL = "http://localhost:8000"

strArgs = "php_server.bat"
oShell.Run strArgs, 0, false

oShell.run(iURL)