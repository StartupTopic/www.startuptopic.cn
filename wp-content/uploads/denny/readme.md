for f in `ls origin/*`; do composite -dissolve 50% -gravity southeast -quality 100 watermark.png $f $(basename $f); done
