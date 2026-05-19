import { mkConfig, generateCsv, download } from "export-to-csv";

const csvConfig = mkConfig({
  useKeysAsHeaders: true,

  filename: "export-data",
});

export function exportCSV<
  T extends Record<string, string | number | boolean | null>,
>(data: T[]) {
  const csv = generateCsv(csvConfig)(data);

  download(csvConfig)(csv);
}
