#!/usr/bin/bash

echo "I am going to compile";

if javac $1

then

echo "Success"

else

echo "Failure"
exit 1

fi
