package main

import (
	"fmt"
	"log/slog"
	"os"
	"path/filepath"
	"runtime"
	"strings"
)

func main() {
	_, filename, _, ok := runtime.Caller(0)
	if !ok {
		slog.Error("failed to get caller information")
		os.Exit(1)
	}
	dir := filepath.Dir(filename)
	versionPath := filepath.Join(dir, "..", "docker", "VERSION")

	content, err := os.ReadFile(versionPath)
	if err != nil {
		slog.Error("failed to read version file", "error", err)
		os.Exit(1)
	}
	version := strings.TrimSpace(string(content))

	fmt.Println(version)
}
