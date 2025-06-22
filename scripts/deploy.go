package main

import (
	"fmt"
	"log/slog"
	"os"
	"strings"
)

func main() {
	content, err := os.ReadFile("../docker/VERSION")
	if err != nil {
		slog.Error("failed to read version file", "error", err)
	}
	version := strings.TrimSpace(string(content))

	fmt.Println(version)
}
