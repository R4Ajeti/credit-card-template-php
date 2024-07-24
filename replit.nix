{ pkgs, legacyPolygott }: {
	deps = [
		pkgs.php74
	] ++ legacyPolygott;
}