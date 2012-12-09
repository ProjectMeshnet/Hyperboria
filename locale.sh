#!/bin/bash
find './locale' -iname '*.po' -type f | while read file; do
	echo "Generating $file"
	msgfmt "$file" -o ${file%.*}.mo
done
